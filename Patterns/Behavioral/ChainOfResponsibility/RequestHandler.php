<?php

class RequestHandler implements Middleware
{

    protected Middleware $next;
    public function setNext(Middleware $next)
    {
        $this->next = $next;
    }


    public function handle(Request $request)
    {
        // do smth
        return $this->next->handle($request);
    }
}