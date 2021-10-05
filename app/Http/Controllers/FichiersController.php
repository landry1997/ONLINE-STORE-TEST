<?php

namespace App\Http\Controllers;

use App\Models\Fichiers;
use App\Models\TypeFichiers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class FichiersController extends Controller
{
    public function indexImage()
    {
        return view('authentication.images.index')->with('typesFichiers', TypeFichiers::all())->with('images', Fichiers::where('typeId', 1)->get());
    }

    public function indexLivre()
    {
        return view('authentication.pdf.index', [
            'livres' => Fichiers::where('typeId', 2)->latest()->get(),
            'typesFichiers' => TypeFichiers::all()

        ]);
    }

    public function indexVideo()
    {
        return view('authentication.videos.index', [
            'videos' => Fichiers::where('typeId', 3)->latest()->get(),
            'typesFichiers' => TypeFichiers::all()

        ]);
    }


    public function createImage()
    {
        return view('authentication.images.create')->with('typesFichiers', TypeFichiers::all())->with('images', Fichiers::where('nom', 'image')->get());
    }

    public function createLivre()
    {
        return view('authentication.pdf.create');
    }

    public function createVideo()
    {
        return view('authentication.videos.create');
    }

    public function storeLivre(Request $request)
    {
        $request->validate([
            'livre' => 'required|mimes:csv,txt,xlx,xls,pdf',
            'nom' => 'required'
        ]);

        if ($request->hasFile('livre')) {

            if ($request->file('livre')->isValid()) {
                $extension = $request->livre->extension();
                $request->livre->storeAs('/public', "livre-" . time() . "." . $extension);
                $url = Storage::url("livre-" . time() . "." . $extension);
            }
        }

        $livre = Fichiers::create([
            'nom' => $request->nom,
            'url' => $url,
            'createur' => Auth::user()->id,
            'typeId' => 2
        ]);

        return redirect('livres');
    }

    public function editLivre(Fichiers $livre)
    {

        return view('authentication.pdf.edit', ['livre' => $livre]);
    }

    public function updateLivre(Request $request, Fichiers $livre)
    {
        $request->validate([
            'nom' => 'required',
            'statut' => 'required'
        ]);

        $input = $request->all();


        if ($request->file('livre')) {
            $extension = $request->livre->extension();
            $request->livre->storeAs('/public', "livre-" . time() . "." . $extension);
            $url = Storage::url("livre-" . time() . "." . $extension);
            $input['livre'] = $url;
        } else {
            unset($input['livre']);
        }

        $livre->update(['nom' => $input['nom'], 'url' => $input['livre'], 'statut' => $input['statut']]);
        return redirect('livres')
            ->with('success', 'Livre updated successfully');
    }

    public function showLivre(Fichiers $livre)
    {

        return view('authentication.pdf.show', ['livre' => $livre]);
    }

    public function storeImage(Request $request)
    {

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,PNG,jpg,gif,svg|max:8192',
            'nom' => 'required'
        ]);

        if ($request->hasFile('image')) {

            if ($request->file('image')->isValid()) {
                $extension = $request->image->extension();
                $request->image->storeAs('/public', "image-" . time() . "." . $extension);
                $url = Storage::url("image-" . time() . "." . $extension);
            }
        }
        $image = Fichiers::create([
            'nom' => $request->nom,
            'url' => $url,
            'createur' => Auth::user()->id,
            'typeId' => 1
        ]);
        return redirect('list-image');
    }

    public function showImage(Fichiers $image)
    {

        return view('authentication.images.show', ['image' => $image]);
    }

    public function editImage(Fichiers $image)
    {

        return view('authentication.images.edit', ['image' => $image]);
    }
    public function updateImage(Request $request, Fichiers $image)
    {
        $request->validate([
            'nom' => 'required',
            'statut' => 'required'
        ]);

        $input = $request->all();


        if ($request->file('image')) {
            $extension = $request->image->extension();
            $request->image->storeAs('/public', "image-" . time() . "." . $extension);
            $url = Storage::url("image-" . time() . "." . $extension);
            $input['image'] = $url;
        } else {
            unset($input['image']);
        }



        $image->update(['nom' => $input['nom'], 'url' => $input['image'], 'statut' => $input['statut']]);
        return redirect('list-image')
            ->with('success', 'Image updated successfully');
    }

    public function storeVideo(Request $request)
    {
        $request->validate([
            'video' => 'required|mimes:x-flv,mp4,MP2T,3gpp,quicktime,x-msvideo,x-ms-wmv',
            'nom' => 'required'
        ]);

        if ($request->hasFile('video')) {

            if ($request->file('video')->isValid()) {
                $extension = $request->video->extension();
                $request->video->storeAs('/public', "video-" . time() . "." . $extension);
                $url = Storage::url("video-" . time() . "." . $extension);
            }
        }

        $video = Fichiers::create([
            'nom' => $request->nom,
            'url' => $url,
            'createur' => Auth::user()->id,
            'typeId' => 3
        ]);

        return redirect('videos');
      }

    public function editVideo(Fichiers $video)
    {

        return view('authentication.videos.edit', ['video' => $video]);
    }

    public function updateVideo(Request $request, Fichiers $video)
    {
        $request->validate([
            'nom' => 'required',
            'statut' => 'required',
            'video' => 'mimes:x-flv,mp4,MP2T,3gpp,quicktime,x-msvideo,x-ms-wmv',
        ]);

        $input = $request->all();


        if ($request->file('video')) {
            $extension = $request->video->extension();
            $request->video->storeAs('/public', "video-" . time() . "." . $extension);
            $url = Storage::url("video-" . time() . "." . $extension);
            $input['video'] = $url;
        } else {
            unset($input['video']);
            $video->update(['nom' => $input['nom'], 'statut' => $input['statut']]);
            return redirect('videos')
                ->with('success', 'video updated successfully');
        }



        $video->update(['nom' => $input['nom'], 'url' => $input['video'], 'statut' => $input['statut']]);
        return redirect('videos')
            ->with('success', 'video updated successfully');
    }

    public function showVideo(Fichiers $video)
    {

        return view('authentication.videos.show', ['video' => $video]);
    }
}
