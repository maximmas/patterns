<?php

interface Middleware
{
    public function setNext(Middleware $next);
    public function handle(Request $request);
}