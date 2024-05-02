<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Blog;
use App\Models\Form;
use App\Models\Page;
use App\Models\Service;
use App\Models\Video;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{

    public function index(){

        SEOMeta::setTitle('İstanbul HBK Kepenk Servisi | Kepenk Tamiri');
        return view('frontend.index');

    }

    public function reference(){

        SEOMeta::setTitle('Referanslarıımız | İstanbul HBK Kepenk Servisi | Kepenk Tamiri');
        return view('frontend.page.reference');
    }

    public function faq(){

        SEOMeta::setTitle('Sıkça Sorulan Sorular | İstanbul HBK Kepenk Servisi | Kepenk Tamiri');
        return view('frontend.page.faq');
    }

    public function team(){

        SEOMeta::setTitle('Ekibimiz | İstanbul HBK Kepenk Servisi | Kepenk Tamiri');

        return view('frontend.page.team');
    }

    public function contact(){

        SEOMeta::setTitle('İletişim | İstanbul HBK Kepenk Servisi | Kepenk Tamiri');
        return view('frontend.contact');
    }

    public function servicedetail($url){
        $Detail = Service::where('slug', $url)->firstOrFail();

        SEOMeta::setTitle($Detail->title. ' | İstanbul HBK Kepenk Servisi ');

        return view('frontend.service.detail', compact('Detail'));
    }

    public function service(){
        SEOMeta::setTitle('İstanbul HBK Kepenk Servisi ');
        SEOMeta::setDescription("İstanbul HBK Kepenk Servisi ");

        return view('frontend.service.index');
    }

    public function blogdetail($url){
        $Detail = Blog::where('slug', $url)->firstOrFail();

        SEOMeta::setTitle($Detail->title. ' | İstanbul HBK Kepenk Servisi | Kepenk Tamiri');

        return view('frontend.blog.detail', compact('Detail'));
    }

    public function servicearea($url){
        $Detail = Blog::where('slug', $url)->firstOrFail();
        SEOMeta::setTitle($Detail->title. ' | İstanbul HBK Kepenk Servisi | Kepenk Tamiri');
        return view('frontend.blog.servicearea', compact('Detail'));
    }

    public function corporatedetail($url){
        $Detail = Page::where('slug', $url)->firstOrFail();

        SEOMeta::setTitle($Detail->title. ' | İstanbul HBK Kepenk Servisi | Kepenk Tamiri');

        return view('frontend.page.detail', compact('Detail'));
    }

    public function blog(){

        SEOMeta::setTitle('Makaleler | İstanbul HBK Kepenk Servisi | Kepenk Tamiri');

        return view('frontend.blog.index');
    }

    public function video(){

        SEOMeta::setTitle('Video Galeri | İstanbul HBK Kepenk Servisi | Kepenk Tamiri');

        $Video = Video::all();
        return view('frontend.video.index', compact('Video'));
    }

    public function form(ContactRequest $request){

        $New = new Form;
        $New->name =  $request->name;
        $New->email =  $request->email;
        $New->phone =  $request->phone;
        $New->subject =  $request->subject;
        $New->message =  $request->message;
        $New->save();

        Mail::send("mail.form",compact('New'),function ($message) use($New) {
            $message->to('olcayy@gmail.com')->subject($New->name.' - Site Bilgi Formu');
        });

        return redirect()->route('home');
    }

}
