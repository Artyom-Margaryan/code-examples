<?php

class TestImageUpload extends TestCase
{
    public function testAvatarUpload()
    {
        Storage::fake('avatars');
        $response = $this->json('POST', '/avatar', [
            'avatar' => UploadedFile::fake()->image('avatar.jpg')
        ]);
        // Assert the file was stored...
        Storage::disk('avatars')->assertExists('avatar.jpg');
        // Assert a file does not exist...
        Storage::disk('avatars')->assertMissing('missing.jpg');
    }
}