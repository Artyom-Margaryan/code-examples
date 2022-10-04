<?php

class testCreateUser
{

    public function testCreateUser() {
        $this->post("/login", [
            'email' => 'testUser@mail.test',
            'password' => 'test-password'
            ]);
        $response = $this->post('admin/users', [
            'login' => 'test-login',
            'email' => 'testNewUser@mail.test',
            'firsName' => 'test-password-new',
            'lastName' => 'test-password-new',
            'password' => 'test-password-new',
        ]);

        $this->assertEquales(303, $response->status());

}
}