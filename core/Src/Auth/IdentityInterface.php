<?php

namespace Src\Auth;

interface IdentityInterface
{
    public function findIdentity(int $id);

    public function getId(): int;

    public function attemptIdentity(array $credentials);

    public function getUser();

    public function checking();

    static public function isAdmin();

}