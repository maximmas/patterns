<?php

interface Middleware
{
    public function setNext(Middleware $next);
    public function handle(FormData $request);
}