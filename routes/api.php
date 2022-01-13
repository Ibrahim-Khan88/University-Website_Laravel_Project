<?php

use App\Http\Controllers\AchievementController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthConroller;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\UsersRegistrationRequestController;
use App\Http\Controllers\NoticeBoardController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\RoomController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('/login', [AuthConroller::class, 'login']);
    Route::post('/register', [AuthConroller::class, 'register']);
    Route::post('/logout', [AuthConroller::class, 'logout']);

    Route::get('/profile', [AuthorController::class, 'profile']);
    Route::get("/fetch-phone/{id}", [AuthorController::class, 'fetchPhoneByAuthor']);
    Route::get("/fetch-comment/{id}", [PostController::class, 'getCommentByPost']);

});


Route::get("fetch/user/registration-request", [UsersRegistrationRequestController::class, 'fetchUsersRegistrationRequest']);
Route::post("user/registration-request", [UsersRegistrationRequestController::class, 'saveUsersRegistrationRequest']);
Route::post("user/registration-request/assign", [UsersRegistrationRequestController::class, 'usersRegistrationRequestAssign']);


Route::post("/save/notice/user/{id}", [NoticeBoardController::class, 'insertNotice']);
Route::get("/fetch/notice/user/{id}", [NoticeBoardController::class, 'fetchNotice']); 

Route::post("/save/achievement", [AchievementController::class, 'saveAchievement']);

Route::get("/fetch/achievement/department/{name}", [AchievementController::class, 'fetchAchievementBydepartment']); 
Route::get("/fetch/teacher/department/{name}", [TeacherController::class, 'fetchTeacherByDepartment']); 
Route::get("/fetch/room/department/{name}", [RoomController::class, 'fetchRoomByDepartment']); 

Route::get("/fetch/groupmember/groupname/{name}", [GroupController::class, 'fetchGroupMemberByGroupName']); 



Route::get("/blog/{data}", [BlogController::class, 'show']);
Route::get("/send-mail", [AuthConroller::class, 'sendConfirmMail']);
Route::post("/author", [AuthorController::class, 'insertRecords']);
Route::delete("/author/delete/{id}", [AuthorController::class, 'deleteAuthor']);
Route::delete("/phone/delete/{id}", [AuthorController::class, 'deletePhone']);
Route::post("/add-post", [PostController::class, 'addPost']);
Route::post("/add-comment/{id}", [PostController::class, 'addComment']);


/*
Post Registration-Request by User
http://127.0.0.1:8000/api/user/registration-request
Object -> {"name": "Md Ibrahim Khan","password": "1122","email": "ikhancse@gmail.com","designation": "Dummy Value","department_name":"Computer Science and Engineering","room_number":"407 Academic Building","phone":"23456789","photo": "","website": "www.DummyValue.com","biographyFiledOfSpecialization": "Dummy Value","researchInterest": "Dummy Value","currentResearchAndCollaboration": "Dummy Value","fellowshipOfScientificAndProfessionalSociaties": "fellowship of scientific and professional sociaties","educationExperience": "education experience","teachingExperience": "teaching experience","researchExperience": "research experience","awardAndRecognition": "award and recognition","publication": "publication","journals": "journals","conference": "journals","graduateSupervision": "graduate supervision","courseOffered": "course offered","courseMaterial": "courseMaterial","roles": "Reject Board, Shakh Rasal Hall, Academic council","email_verified_at": null,"created_at": "2022-01-05T00:00:00.000000Z","updated_at": "2022-01-05T00:00:00.000000Z"}
photo -> 

Fetch Registration-Request
http://127.0.0.1:8000/api/fetch/user/registration-request

Login Operation
http://127.0.0.1:8000/api/auth/login
{
	"email" : "dummydata@gmail.com",
	"password": "11"
}

Group Fetch
http://127.0.0.1:8000/api/fetch/groupmember/groupname/Sheikh Rasal Hall    ->
http://127.0.0.1:8000/api/fetch/groupmember/groupname/Academic Council



Department Fetch
http://127.0.0.1:8000/api/fetch/teacher/department/Computer Science and Engineering
http://127.0.0.1:8000/api/fetch/room/department/Computer Science and Engineering
http://127.0.0.1:8000/api/fetch/achievement/department/Computer Science and Engineering

Achievement post for dept
http://127.0.0.1:8000/api/save/achievement
Object -> {"title": "title","body": "body","department": "Computer Science and Engineering"}
photo -> 

*/


