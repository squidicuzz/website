<?php

class StaffFilter {

    public function __construct(AuthProviderInterface $auth) {
        $this->auth = $auth;
    }

    public function filter() {
        if (!$this->auth->isStaff()) {
            return Redirect::to("/oauth/confirm");
        } else if (!$this->auth->isStaff()) {
            throw new UnauthorizedException();
        }
    }
} 