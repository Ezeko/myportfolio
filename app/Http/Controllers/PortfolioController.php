<?php

namespace App\Http\Controllers;

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
            
            $imageName = time().'.'.request()->image2->getClientOriginalExtension();

    

            request()->image2->move(public_path('images'), $imageName);

    

            return back()

                ->with('success','You have successfully upload image.')

                ->with('image',$imageName);
        }

        
        if ( $request->image3 )
        {
            request()->validate([

                'image3' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    
            ]);
            
            $imageName = time().'.'.request()->image3->getClientOriginalExtension();

    

            request()->image3->move(public_path('images'), $imageName);

    

            return back()

                ->with('success','You have successfully upload image.')

                ->with('image',$imageName);
        }

        
        if ( $request->image4 )
        {
            request()->validate([

                'image4' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    
            ]);
            
            $imageName = time().'.'.request()->image4->getClientOriginalExtension();

    

            request()->image4->move(public_path('images'), $imageName);

    

            return back()

                ->with('success','You have successfully upload image.')

                ->with('image',$imageName);
        }
        
    }
}
