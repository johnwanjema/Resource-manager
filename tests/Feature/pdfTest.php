<?php

namespace Tests\Feature;

use App\Models\Pdf;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Http\UploadedFile;

class pdfTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testPdfCreatedSuccessfully()
    {
        $user = User::factory()->make();
        $this->actingAs($user, 'sanctum');

        $file = UploadedFile::fake()->create('file.pdf');

        $pdfData = [
            "title" => "Javascript",
            "description" => "Guide for Javascript",
            "pdf" => $file,
        ];

        $this->json('POST', 'api/pdfs', $pdfData, ['Accept' => 'application/json'])
            ->assertStatus(200)
            ->assertJsonStructure([
                "success",
                "errors",
                "status_code",
                "status_message",
                "message",
                "data" => [
                    "title",
                    "description",
                    "storageLink",
                    "status",
                    "updated_at",
                    "created_at",
                    "id"
                ],
            ]);
    }

    public function testCEOListedSuccessfully()
    {

        $user = User::factory()->make();
        $this->actingAs($user, 'sanctum');

        Pdf::factory()->create([
            "title" => "Javascript",
            "description" => "Made easier",
            "status" => "available",
            "storageLink" => "js.pdf",
        ]);


        $this->json('GET', 'api/pdfs', ['Accept' => 'application/json'])
            ->assertStatus(200)
            ->assertJsonStructure([
                "success",
                "errors",
                "status_code",
                "status_message",
                "message",
                "data" => [],
            ]);
    }
}
