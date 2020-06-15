<?php

namespace Tests\Feature\Domains\Auth\Http\Controllers\Frontend\Auth;

use Tests\TestCase;

/**
 * @see \App\Domains\Auth\Http\Controllers\Frontend\Auth\PasswordExpiredController
 */
class PasswordExpiredControllerTest extends TestCase
{
    /**
     * @test
     */
    public function expired_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $response = $this->get(route('frontend.auth.password.expired'));

        $response->assertOk();
        $response->assertViewIs('frontend.auth.passwords.expired');

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function update_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $response = $this->patch(route('frontend.auth.password.expired.update'), [
            // TODO: send request data
        ]);

        $response->assertRedirect(withFlashSuccess(__('Password successfully updated.')));

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function update_validates_with_a_form_request()
    {
        $this->assertActionUsesFormRequest(
            \App\Domains\Auth\Http\Controllers\Frontend\Auth\PasswordExpiredController::class,
            'update',
            \App\Domains\Auth\Http\Requests\Frontend\Auth\UpdatePasswordRequest::class
        );
    }

    // test cases...
}
