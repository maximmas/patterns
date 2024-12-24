<?php

class App
{

    public Repository $repository;

    /**
     * Внедрение зависимости через конструктор
     *
     * @param Reposiitory $repository
     *
     */
    public function __construct(Reposiitory $repository){
        $this->repository = $repository;
    }


    /**
     * Внедрение зависимости через сеттер, альтернатива внедрению через конструктор
     *
     * @param Reposiitory $repository
     *
     */
    public function setRepository(Repository $repository): void
    {
        $this->repository = $repository;
    }

}