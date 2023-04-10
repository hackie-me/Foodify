<?php

namespace App\Http\Controllers\app;

use App\Http\Controllers\Controller;
use App\Models\TodoBlock;
use App\Models\TodoItems;
use Illuminate\Http\Request;

class Todo extends Controller
{

    // Function to show Todo Page
    public function index()
    {
        $this->user = auth()->user();
        // print_r($this->user);
        // Get all Todo Blocks by user id
        $todoBlocks = TodoBlock::where('user_id', $this->user->id)->get();

        // Get all Todo Items by block id
        foreach ($todoBlocks as $todoBlock) {
            $todoBlock->todoItems = TodoItems::where('todo_blocks_id', $todoBlock->id)->get();
        }
        // Return the view with data
        $data = compact('todoBlocks');
        return view('app.todo.index', $data);
    }

    // Function to add Todo Block
    public function addTodoBlock(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required'
        ]);

        // Create Todo Block
        $block = new TodoBlock();
        $block->name = $request->name;
        $block->user_id = $request->user;
        if ($block->save()) {
            // Return success response code 201 with message
            return response()->json([
                'status' => 'success',
                'message' => 'Todo Block Added Successfully',
                'data' => $block
            ], 201);
        } else {
            // Return error response code 500 with message
            return response()->json([
                'status' => 'error',
                'message' => 'Todo Block Not Added'
            ], 500);
        }
    }

    // Function to add Todo Item
    public function addTodoItem(Request $request)
    {
        $response = $request->validate([
            'name' => 'required',
            'block_id' => 'required'
        ]);

        // Create Todo Item
        $item = new TodoItems();
        $item->name = $request->name;
        $item->todo_blocks_id = $request->block_id;
        if ($item->save()) {
            // Return success response code 201 with message and recent added item
            return response()->json([
                'status' => 'success',
                'message' => 'Todo Item Added Successfully',
                'data' => $item
            ]);
        } else {
            // Return error response code 500 with message
            return response()->json([
                'status' => 'error',
                'message' => 'Todo Item Not Added'
            ]);
        }
    }

    // Function to archive Todo
    public function archiveTodo(Request $request)
    {
        $response = $request->validate([
            'id' => 'required',
            'status' => 'required'
        ]);

        /// Update Todo Block as archived
        /// by id
        $block = TodoBlock::find($request->id);
        if ($request->status == 'true')
            $block->is_archived = 1;
        else if ($request->status == 'false')
            $block->is_archived = 0;
        else
            $block->is_archived = 0;

        if ($block->save()) {
            // Return success response code 201 with message
            return response()->json([
                'status' => 'success',
                'message' => 'Todo Block Archived Successfully'
            ]);
        } else {
            // Return error response code 500 with message
            return response()->json([
                'status' => 'error',
                'message' => 'Todo Block Not Archived'
            ]);
        }

    }

    // Function to mark Todo as completed
    public function completedTodo(Request $request)
    {
        $response = $request->validate([
            'id' => 'required',
            'status' => 'required'
        ]);

        /// Update Todo Item as completed
        /// by id
        $item = TodoItems::find($request->id);
        if ($request->status == 'true')
            $item->is_completed = 1;
        else if ($request->status == 'false')
            $item->is_completed = 0;
        else
            $item->is_completed = 0;

        if ($item->save()) {
            // Return success response code 201 with message
            return response()->json([
                'status' => 'success',
                'message' => 'Todo Item Completed Successfully'
            ]);
        } else {
            // Return error response code 500 with message
            return response()->json([
                'status' => 'error',
                'message' => 'Todo Item Not Completed'
            ]);
        }
    }

    // Function to delete Todo
    public function deleteTodo(Request $request)
    {
        $request = $request->validate([
            'id' => 'required',
            'type' => 'required'
        ]);

        if ($request['type'] == 'block') {
            // Delete Todo Block
            $block = TodoBlock::find($request['id']);
            // Delete all Todo Items by block id
            TodoItems::where('todo_blocks_id', $block->id)->delete();
            if ($block->delete()) {
                // Return success response code 201 with message
                return response()->json([
                    'status' => 'success',
                    'message' => 'Todo Block Deleted Successfully'
                ]);
            } else {
                // Return error response code 500 with message
                return response()->json([
                    'status' => 'error',
                    'message' => 'Todo Block Not Deleted'
                ]);
            }
        } else if ($request['type'] == 'task') {
            // Delete Todo Item task
            $item = TodoItems::find($request['id']);
            if ($item->delete()) {
                // Return success response code 201 with message
                return response()->json([
                    'status' => 'success',
                    'message' => 'Todo Item Deleted Successfully'
                ]);
            } else {
                // Return error response code 500 with message
                return response()->json([
                    'status' => 'error',
                    'message' => 'Todo Item Not Deleted'
                ]);
            }
        }
    }

    // Function to remove all completed Todo Blocks
    public function removeCompletedTodoBlocks()
    {
        $user = auth()->user();
        // Get all Todo Blocks by user id
        $todoBlocks = TodoBlock::where('user_id', $user->id)->get();
        foreach ($todoBlocks as $todoBlock) {
            // Delete all Todo Items by block id if all Todo Items are completed
            if (TodoItems::where('todo_block_id', $todoBlock->id)->where('is_completed', 0)->count() == 0){
                TodoItems::where('todo_block_id', $todoBlock->id)->delete();
                $todoBlock->delete();
            }else{
                continue;
            }
        }
        // Return success response code 201 with message
        return redirect()->back()->with('success', 'All Completed Todo Blocks Removed Successfully');
    }

    // Function to remove Blocks and Items by user id
    public function removeAll()
    {
        $user = auth()->user();
        // Get all Todo Blocks by user id
        $todoBlocks = TodoBlock::where('user_id', $user->id)->get();
        foreach ($todoBlocks as $todoBlock) {
            // Delete all Todo Items by block id
            TodoItems::where('todo_blocks_id', $todoBlock->id)->delete();
            $todoBlock->delete();
        }

        return redirect()->back()->with('success', 'All Todo Blocks and Items Removed Successfully');
    }
}
