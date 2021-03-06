<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// dont need auth

//  Route::get('/', function () {
//      return view('welcome');
//  });


//  the main web pages
Route::prefix('/')->group(function(){
    Route::get('/','Web\Main\Main_cont@index')->name('Web.Main');

    
});

//  the admin panel 
Route::prefix('Admin')->group(function(){
    Route::get('Index/','Admin\Index_cont@index')->name('Admin.Index');

    // this is grouping of courses
    Route::prefix('Course')->group(function(){
        Route::get('/','Admin\Course\course_cont@index')->name('Course.Index');

        Route::get('Add','Admin\Course\course_cont@add')->name('Course.Add');;
        Route::post('Add','Admin\Course\course_cont@add')->name('Course.Add');;

        Route::get('Update/{id}','Admin\Course\course_cont@update')->name('Course.Update');;
        Route::post('Update/{id}','Admin\Course\course_cont@update')->name('Course.Update');;

        Route::get('Delete/{id}','Admin\Course\course_cont@delete')->name('Course.Delete');;
        Route::post('Delete/{id}','Admin\Course\course_cont@delete')->name('Course.Delete');;
    });

        // this is grouping of students in courses
        Route::prefix('CourseStudent')->group(function(){
            Route::get('/','Admin\CourseStudent\CourseStudent_cont@index')->name('CourseStudent.Index');
    
            Route::get('Add','Admin\CourseStudent\CourseStudent_cont@add')->name('CourseStudent.Add');;
            Route::post('Add','Admin\CourseStudent\CourseStudent_cont@add')->name('CourseStudent.Add');;
        
            Route::get('Delete/{id}','Admin\CourseStudent\CourseStudent_cont@delete')->name('CourseStudent.Delete');;
            Route::post('Delete/{id}','Admin\CourseStudent\CourseStudent_cont@delete')->name('CourseStudent.Delete');;
        });

            // this is grouping of weeks in courses
            Route::prefix('CourseWeek')->group(function(){
                Route::get('/','Admin\CourseWeek\CourseWeek_cont@index')->name('CourseWeek.Index');
        
                Route::get('Add','Admin\CourseWeek\CourseWeek_cont@add')->name('CourseWeek.Add');;
                Route::post('Add','Admin\CourseWeek\CourseWeek_cont@add')->name('CourseWeek.Add');;
                
                Route::get('Delete/{id}','Admin\CourseWeek\CourseWeek_cont@delete')->name('CourseWeek.Delete');;
                Route::post('Delete/{id}','Admin\CourseWeek\CourseWeek_cont@delete')->name('CourseWeek.Delete');;
            });

                   // this is grouping of students in weeks
                   Route::prefix('StudentWeek')->group(function(){
                    Route::get('/','Admin\StudentWeek\StudentWeek_cont@index')->name('StudentWeek.Index');
            
                    Route::get('Add','Admin\StudentWeek\StudentWeek_cont@add')->name('StudentWeek.Add');;
                    Route::post('Add','Admin\StudentWeek\StudentWeek_cont@add')->name('StudentWeek.Add');;
                    
                    Route::get('Delete/{id}','Admin\StudentWeek\StudentWeek_cont@delete')->name('StudentWeek.Delete');;
                    Route::post('Delete/{id}','Admin\StudentWeek\StudentWeek_cont@delete')->name('StudentWeek.Delete');;
                });
    

       // this is grouping of students
       Route::prefix('Student')->group(function(){
        Route::get('/','Admin\Student\Student_cont@index')->name('Student.Index');

        Route::get('Add','Admin\Student\Student_cont@add')->name('Student.Add');;
        Route::post('Add','Admin\Student\Student_cont@add')->name('Student.Add');;

        Route::get('Delete/{id}','Admin\Student\Student_cont@delete')->name('Student.Delete');;
        Route::post('Delete/{id}','Admin\Student\Student_cont@delete')->name('Student.Delete');;
    });

        // this is grouping of doctors
    Route::prefix('Doctor')->group(function(){
        Route::get('/','Admin\Doctor\Doctor_cont@index')->name('Doctor.Index');

        Route::get('Add','Admin\Doctor\Doctor_cont@add')->name('Doctor.Add');;
        Route::post('Add','Admin\Doctor\Doctor_cont@add')->name('Doctor.Add');;

        Route::get('Delete/{id}','Admin\Doctor\Doctor_cont@delete')->name('Doctor.Delete');;
        Route::post('Delete/{id}','Admin\Doctor\Doctor_cont@delete')->name('Doctor.Delete');;
    });

    // this is grouping of departments
    Route::prefix('Department')->group(function(){
        Route::get('/','Admin\Department\Department_cont@index')->name('Department.Index');

        Route::get('Add','Admin\Department\Department_cont@add')->name('Department.Add');;
        Route::post('Add','Admin\Department\Department_cont@add')->name('Department.Add');;

        Route::get('Delete/{id}','Admin\Department\Department_cont@delete')->name('Department.Delete');;
        Route::post('Delete/{id}','Admin\Department\Department_cont@delete')->name('Department.Delete');;
    });

        // this is grouping of weeks
        Route::prefix('Week')->group(function(){
            Route::get('/','Admin\Week\Week_cont@index')->name('Week.Index');
    
            Route::get('Add','Admin\Week\Week_cont@add')->name('Week.Add');;
            Route::post('Add','Admin\Week\Week_cont@add')->name('Week.Add');;
    
            Route::get('Delete/{id}','Admin\Week\Week_cont@delete')->name('Week.Delete');;
            Route::post('Delete/{id}','Admin\Week\Week_cont@delete')->name('Week.Delete');;
        });


    // this is grouping of images
    Route::prefix('Image')->group(function(){
        Route::get('/','Admin\Image\Image_cont@index')->name('Image.Index');

        Route::get('Add','Admin\Image\Image_cont@add')->name('Image.Add');;
        Route::post('Add','Admin\Image\Image_cont@add')->name('Image.Add');;

        Route::get('Delete/{id}','Admin\Image\Image_cont@delete')->name('Image.Delete');;
        Route::post('Delete/{id}','Admin\Image\Image_cont@delete')->name('Image.Delete');;

    });
    

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
