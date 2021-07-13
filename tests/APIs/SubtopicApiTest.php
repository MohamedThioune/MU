<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Subtopic;

class SubtopicApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_subtopic()
    {
        $subtopic = factory(Subtopic::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/subtopics', $subtopic
        );

        $this->assertApiResponse($subtopic);
    }

    /**
     * @test
     */
    public function test_read_subtopic()
    {
        $subtopic = factory(Subtopic::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/subtopics/'.$subtopic->id
        );

        $this->assertApiResponse($subtopic->toArray());
    }

    /**
     * @test
     */
    public function test_update_subtopic()
    {
        $subtopic = factory(Subtopic::class)->create();
        $editedSubtopic = factory(Subtopic::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/subtopics/'.$subtopic->id,
            $editedSubtopic
        );

        $this->assertApiResponse($editedSubtopic);
    }

    /**
     * @test
     */
    public function test_delete_subtopic()
    {
        $subtopic = factory(Subtopic::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/subtopics/'.$subtopic->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/subtopics/'.$subtopic->id
        );

        $this->response->assertStatus(404);
    }
}
