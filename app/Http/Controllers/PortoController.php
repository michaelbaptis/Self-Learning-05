<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class PortoController extends Controller
{
    public function index(){
        $porto = [
            ['id' => '1', 'name' => 'Church', 'img' => '/assets/Group 2.png'],
            ['id' => '2', 'name' => 'Presentation Video', 'img' => '/assets/Group 3.png'],
            ['id' => '3', 'name' => 'Drophin UI', 'img' => '/assets/Group 5.png'],
            ['id' => '1', 'name' => 'Self Photography', 'img' => '/assets/Group 4.png'],
            ['id' => '2', 'name' => 'Pocari Sweat Ads', 'img' => '/assets/Group 8.png'],
            ['id' => '3', 'name' => 'BLI Easy Access UI', 'img' => '/assets/Group 7.png'],
            ['id' => '2', 'name' => 'Short Movie Project', 'img' => '/assets/Group 11.png'],
            ['id' => '3', 'name' => 'Fugemy UI', 'img' => '/assets/Group 6.png'],
            ['id' => '2', 'name' => 'Cinematic Project', 'img' => '/assets/Group 14.png'],
            ['id' => '1', 'name' => 'Self Studio', 'img' => '/assets/Group 15.png'],
            ['id' => '1', 'name' => 'Street Photography', 'img' => '/assets/Group 13.png'],
            ['id' => '2', 'name' => 'Movie Series Project', 'img' => '/assets/Group 12.png']

        ];
        return view('index')->with('porto',$porto);
    }

    public function detail($id){
        $detail = [
            ['id' => '1', 'name' => 'Photography', 'desc' => "Photography is the art and technique of creating images using a camera. Photography can produce static images that capture a moment in time, or moving images such as videos. The images produced by photography can be realistic, abstract, or digitally manipulated depending on the technique and purpose of the shot.
            I like photography of both moving and still objects. Photography can be done indoors or outdoors. From photography we can learn that there are many ways in which we can view an object. Perspective is the most important thing in photography.
            "],
            ['id' => '2', 'name' => 'Videography & Editing', 'desc' => "Video editing is the process of editing and combining video footage into a more structured, interesting and meaningful whole. The video editing process usually involves cutting and arranging the sequence of video clips, adding transitions between clips, adding visual or sound effects, and managing the overall quality of the video.

            These two things are closely related. But the most important of the two is the theme, concept, and feelings that are expressed in the video production and editing. From videography we can learn that movement in a perspective can affect the feeling of a view. And from Editing we can learn that uniting a view into a story is a very valuable thing. Because from the story there is a meaning, a feeling, a message that can be conveyed to the people who will watch it."],

            ['id' => '3', 'name' => 'UI Design', 'desc' => "UI Design (User Interface design) is the process of designing user interfaces on digital products such as mobile applications, websites, software, and so on, so that users can interact with these products easily and intuitively. The goal of UI design is to ensure that users can use the digital product easily, efficiently, and pleasantly.

            From UI Design we can see that there are many ways we can make things look more beautiful. But sometimes what we think is beautiful is not necessarily what other people think is beautiful. Because the beauty of something is not absolute. Everything depends on the point of view and experience of the beauty.
            "]

        ];
        return view('porto')->with(['detail'=>$detail, 'id'=>$id]);
    }
}
