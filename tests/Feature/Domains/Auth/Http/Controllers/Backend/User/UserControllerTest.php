<?php

namespace Tests\Feature\Domains\Auth\Http\Controllers\Backend\User;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * @see \App\Domains\Auth\Http\Controllers\Backend\User\UserController
 */
class UserControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function create_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $response = $this->get(route('admin.auth.user.create'));

        $response->assertOk();
        $response->assertViewIs();

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function destroy_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $response = $this->delete(route('admin.auth.user.destroy', ['user' => $user]));

        $response->assertRedirect(withFlashSuccess(__('The user was successfully deleted.')));
        $this->assertDeleted($admin);

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function destroy_validates_with_a_form_request()
    {
        $this->assertActionUsesFormRequest(
            \App\Domains\Auth\Http\Controllers\Backend\User\UserController::class,
            'destroy',
            \App\Domains\Auth\Http\Requests\Backend\User\DeleteUserRequest::class
        );
    }

    /**
     * @test
     */
    public function edit_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $response = $this->get(route('admin.auth.user.edit', ['user' => $user]));

        $response->assertOk();
        $response->assertViewIs();

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function edit_validates_with_a_form_request()
    {
        $this->assertActionUsesFormRequest(
            \App\Domains\Auth\Http\Controllers\Backend\User\UserController::class,
            'edit',
            \App\Domains\Auth\Http\Requests\Backend\User\EditUserRequest::class
        );
    }

    /**
     * @test
     */
    public function index_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $response = $this->get(route('admin.auth.user.index'));

        $response->assertOk();
        $response->assertViewIs('backend.auth.user.index');

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function show_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $response = $this->get(route('admin.auth.user.show', ['user' => $user]));

        $response->assertOk();
        $response->assertViewIs();

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function store_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $response = $this->post(route('admin.auth.user.store'), [
            // TODO: send request data
        ]);

        $response->assertRedirect(withFlashSuccess(__('The user was successfully created.')));

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function store_validates_with_a_form_request()
    {
        $this->assertActionUsesFormRequest(
            \App\Domains\Auth\Http\Controllers\Backend\User\UserController::class,
            'store',
            \App\Domains\Auth\Http\Requests\Backend\User\StoreUserRequest::class
        );
    }

    /**
     * @test
     */
    public function update_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $response = $this->patch(route('admin.auth.user.update', ['user' => $user]), [
            // TODO: send request data
        ]);

        $response->assertRedirect(withFlashSuccess(__('The user was successfully updated.')));

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function update_validates_with_a_form_request()
    {
        $this->assertActionUsesFormRequest(
            \App\Domains\Auth\Http\Controllers\Backend\User\UserController::class,
            'update',
            \App\Domains\Auth\Http\Requests\Backend\User\UpdateUserRequest::class
        );
    }

    // test cases...
}
