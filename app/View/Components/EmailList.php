<?php

namespace App\View\Components;

use Illuminate\View\Component;

class EmailList extends Component
{
    public bool $pinned;
    public bool $flag;
    public string $subject;
    public string $time;
    public string $avatar;
    public string $sender;
    public string $message;
    public bool $hasAttachment;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($sender, $subject, $message, $time, $avatar = null, $hasAttachment = false, $pinned = false, $flag = false)
    {
        $this->sender = $sender;
        $this->subject = $subject;
         $this->message = substr($message, 0, 50) . "...";
        $this->time = $time;
        if($avatar == null)
            $this->avatar = url('/assets/img/foodify/customer-2.jpg');
        else
            $this->avatar = $avatar;
        $this->hasAttachment = $hasAttachment;
        $this->pinned = $pinned;
        $this->flag = $flag;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.email-list');
    }
}
