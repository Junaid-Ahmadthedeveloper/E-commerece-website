<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\product;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function logged(){
        $data = User::where('usertype', 'user')->get();
        $usertype = Auth::user()->usertype;
        if($usertype == 'admin'){
            return view('adminpanel.user.user_tbl',['data' => $data]);
        } else {
            return view('web');
        }
    }


    public function delete($id){
        $empdata = User::find($id);
        $empdata->delete();
        return redirect()->back()->with('message', 'User deleteted successfully...');
    }






    public function user_table(){
      $data = User::where('usertype' , 'user')->get();
        return view('adminpanel.user.user_tbl',['data' => $data]);
    }

    public function show_contactpage(){
        return view('websitepages.contact_us');
    }
    public function show_aboutpage(){
        return view('websitepages.about_us');
    }
   







public function search(Request $request){
    $query = $request->input('query');
    $products = product::where('name', 'like', "%$query%")->get();

    return view('websitepages.search',['products' => $products, 'query' => $query] );
}




}
