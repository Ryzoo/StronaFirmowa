<?php


namespace App\Http\Controllers;


use App\Http\Requests\ContactMessageSendRequest;
use App\Mail\ContactMessageMail;
use Illuminate\Support\Facades\Mail;
use TCG\Voyager\Models\Post;

class BasePageController
{
	public function showMainView()
	{
		return view('pages.welcome');
	}

	public function showOfferView()
	{
		return view('pages.offer');
	}

	public function showRealizationView()
	{
		return view('pages.realization');
	}

	public function showContactView()
	{
		return view('pages.contact');
	}

	public function showBlogView()
	{
		return view('pages.blog', [
			"posts" => Post::where('status', 'published')
				->orderBy('created_at', 'desc')
				->simplePaginate(10)
		]);
	}

	public function showBlogPostView(Post $post)
	{
		return view('pages.post', [
			"post" => $post
		]);
	}

	public function sendMessage(ContactMessageSendRequest $request)
	{
		$title = $request->validated()['title'];
		$email = $request->validated()['email'];
		$message = $request->validated()['message'];

		Mail::send(new ContactMessageMail($title, $email, $message));

		return back()->with('status', 'Twoja wiadomość została wysłana. Odpowiemy tak szybko jak to możliwe.');
	}
}