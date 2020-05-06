<?php

namespace App\Http\Controllers;

use App\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    //
    public function showAddPortfolioPage ( $username )
    {
        //$username = Session()->get('username');

        echo $username."'s portfolio";
    }

    public function addPortfolio (Request $request)
    {
        // adding portfolio method
        request()->validate([

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

  

        $imageName = time().'.'.request()->image->getClientOriginalExtension();

  

        request()->image->move(public_path('images'), $imageName);

  

        return back()

            ->with('success','You have successfully upload image.')

            ->with('image',$imageName);

        if ( $request->image2 )
        {
            request()->validate([

                'image2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    
            ]);
            
            $image2Name = time().'.'.request()->image2->getClientOriginalExtension();

    

            request()->image2->move(public_path('images'), $imageName);

    

            return back()

                ->with('success','You have successfully upload image.')

                ->with('image',$image2Name);
        }

        
        if ( $request->image3 )
        {
            request()->validate([

                'image3' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    
            ]);
            
            $image3Name = time().'.'.request()->image3->getClientOriginalExtension();

    

            request()->image3->move(public_path('images'), $image3Name);

    

            return back()

                ->with('success','You have successfully upload image.')

                ->with('image',$image3Name);
        }

        
        if ( $request->image4 )
        {
            request()->validate([

                'image4' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    
            ]);
            
            $image4Name = time().'.'.request()->image4->getClientOriginalExtension();

    

            request()->image4->move(public_path('images'), $image4Name);

    

            return back()

                ->with('success','You have successfully upload image.')

                ->with('image',$image4Name);
        }

        $username = Session()->get('username');
        
        $portfolio = new Portfolio();

        $portfolio->image1 = $imageName;
        $portfolio->image2 = $image2Name;
        $portfolio->image3 = $image3Name;
        $portfolio->image4 = $image4Name;
        $portfolio->description = $request->description;
        $portfolio->user_id = Session()->get('id');

        $createdPortfolio = $portfolio->save();

        if ($createdPortfolio) {
            return redirect('/'. $username);
        }
        else 
        {
            echo "<script>alert('Oops!!! Error occur'); window.location='/add/$username';</script>";
        }
    }
}
