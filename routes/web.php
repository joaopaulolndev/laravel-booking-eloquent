<?php

use App\Room;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {

    $check_in = '2020-06-01';
    $check_out = '2020-06-09';
//
//    // $result = Reservation::where(function($q) use($check_in, $check_out) {
//    //     $q->where('check_in', '>', $check_in);
//    //     $q->where('check_in', '>=', $check_out);
//    // })
//    // ->orWhere(function($q) use($check_in, $check_out) {
//    //     $q->where('check_out', '<=', $check_in);
//    //     $q->where('check_out', '<', $check_out);
//    // })
//    // ->get();
//
//    $result = DB::table('rooms')->whereNotExists(function ($query) use ($check_in, $check_out) {
//        $query->select('reservations.id')
//            ->from('reservations')
//            ->join('reservation_room', 'reservations.id', '=', 'reservation_room.reservation_id')
//            ->whereRaw('rooms.id = reservation_room.room_id')
//            ->where(function ($q) use ($check_in, $check_out) {
//                $q->where('check_out', '>', $check_in);
//                $q->where('check_in', '<', $check_out);
//            })
//            ->limit(1);
//    })
//        ->paginate(10);
//
//    dump($result);

//    $check_in = '2020-06-01';
//    $check_out = '2020-06-09';
//
//    // $result = DB::table('rooms')->join('room_types','rooms.room_type_id','=','room_types.id')
//    // ->whereNotExists(function ($query) use ($check_in, $check_out) {
//    //     $query->select('reservations.id')
//    //             ->from('reservations')
//    //             ->join('reservation_room', 'reservations.id', '=', 'reservation_room.reservation_id')
//    //             ->whereRaw('rooms.id = reservation_room.room_id')
//    //             ->where(function ($q) use ($check_in, $check_out) {
//    //                     $q->where('check_out', '>', $check_in);
//    //                     $q->where('check_in', '<', $check_out);
//    //                 })
//    //                 ->limit(1);
//    // })
//    // ->get();
//
//    $result = Room::with('type')
//        ->whereDoesntHave('reservations' , function($q) use ($check_in, $check_out) {
//            $q->where(function($q) use($check_in, $check_out) {
//                $q->where('check_out', '>', $check_in);
//                $q->where('check_in', '<', $check_out);
//            });
//        })
//        ->get();


    $city_id = 2;
//
//    $result = DB::table('rooms')->join('room_types','rooms.room_type_id','=','room_types.id')
//        ->whereNotExists(function ($query) use ($check_in, $check_out) {
//            $query->select('reservations.id')
//                ->from('reservations')
//                ->join('reservation_room', 'reservations.id', '=', 'reservation_room.reservation_id')
//                ->whereColumn('rooms.id', 'reservation_room.room_id')
//                ->where(function ($q) use ($check_in, $check_out) {
//                    $q->where('check_out', '>', $check_in);
//                    $q->where('check_in', '<', $check_out);
//                })
//                ->limit(1);
//        })
//        ->whereExists(function($q) use($city_id) {
//            $q->select('hotels.id')
//                ->from('hotels')
//                ->whereColumn('rooms.hotel_id','hotels.id')
//                ->whereExists(function($q) use($city_id) {
//                    $q->select('cities.id')
//                        ->from('cities')
//                        ->whereColumn('cities.id','hotels.city_id')
//                        ->where('id', $city_id)
//                        ->limit(1);
//                })
//                ->limit(1);
//        })
//        ->paginate(10);

    // $result = Room::with('type')
    //     ->whereDoesntHave('reservations' , function($q) use ($check_in, $check_out) {
    //                 $q->where(function($q) use($check_in, $check_out) {
    //                     $q->where('check_out', '>', $check_in);
    //                     $q->where('check_in', '<', $check_out);
    //             });
    //         })
    //         ->whereHas('hotel.city', function($q) use ($city_id) {
    //             $q->where('id', $city_id);
    //         })
    //         ->paginate(10);


    // $result = DB::table('rooms')
    // ->select('rooms.*', 'room_types.size', 'room_types.price', 'room_types.amount', 'hotels.name as hotel_name', 'hotels.id as hotel_id')
    // ->join('room_types', 'rooms.room_type_id', '=', 'room_types.id')
    // ->join('hotels', 'rooms.hotel_id', '=', 'hotels.id')
    // ->whereNotExists(function ($query) use ($check_in, $check_out) {
    //     $query->select('reservations.id')
    //             ->from('reservations')
    //             ->join('reservation_room', 'reservations.id', '=', 'reservation_room.reservation_id')
    //             ->whereColumn('rooms.id', 'reservation_room.room_id')
    //             ->where(function ($q) use ($check_in, $check_out) {
    //                     $q->where('check_out', '>', $check_in);
    //                     $q->where('check_in', '<', $check_out);
    //                 })
    //                 ->limit(1);
    // })
    // ->whereExists(function($q) use($city_id) {
    //     $q->select('hotels.id')
    //             ->from('hotels')
    //             ->whereColumn('rooms.hotel_id','hotels.id')
    //             ->whereExists(function($q) use($city_id) {
    //                 $q->select('cities.id')
    //                 ->from('cities')
    //                 ->whereColumn('cities.id','hotels.city_id')
    //                 ->where('id', $city_id)
    //                 ->limit(1);
    //             })
    //             ->limit(1);
    // })
    // ->where('room_types.amount', '>', 0)
    // ->paginate(10);

//    $result = Room::with(['type', 'hotel'])
//        ->whereDoesntHave('reservations' , function($q) use ($check_in, $check_out) {
//            $q->where(function($q) use($check_in, $check_out) {
//                $q->where('check_out', '>', $check_in);
//                $q->where('check_in', '<', $check_out);
//            });
//        })
//        ->whereHas('hotel.city', function($q) use ($city_id) {
//            $q->where('id', $city_id);
//        })
//        ->whereHas('type', function($q) {
//            $q->where('amount', '>', 0);
//        })
//        ->paginate(10);

//
//    $result = DB::table('rooms')
//        ->select('rooms.*', 'room_types.size', 'room_types.price', 'room_types.amount', 'hotels.name as hotel_name', 'hotels.id as hotel_id')
//        ->join('room_types', 'rooms.room_type_id', '=', 'room_types.id')
//        ->join('hotels', 'rooms.hotel_id', '=', 'hotels.id')
//        ->whereNotExists(function ($query) use ($check_in, $check_out) {
//            $query->select('reservations.id')
//                ->from('reservations')
//                ->join('reservation_room', 'reservations.id', '=', 'reservation_room.reservation_id')
//                ->whereColumn('rooms.id', 'reservation_room.room_id')
//                ->where(function ($q) use ($check_in, $check_out) {
//                    $q->where('check_out', '>', $check_in);
//                    $q->where('check_in', '<', $check_out);
//                })
//                ->limit(1);
//        })
//        ->whereExists(function($q) use($city_id) {
//            $q->select('hotels.id')
//                ->from('hotels')
//                ->whereColumn('rooms.hotel_id','hotels.id')
//                ->whereExists(function($q) use($city_id) {
//                    $q->select('cities.id')
//                        ->from('cities')
//                        ->whereColumn('cities.id','hotels.city_id')
//                        ->where('id', $city_id)
//                        ->limit(1);
//                })
//                ->limit(1);
//        })
//        ->where('room_types.amount', '>', 0)
//        ->orderBy('room_types.price', 'asc')
//        ->paginate(10);

    // $result = Room::with(['type', 'hotel'])
    //     ->whereDoesntHave('reservations' , function($q) use ($check_in, $check_out) {
    //                 $q->where(function($q) use($check_in, $check_out) {
    //                     $q->where('check_out', '>', $check_in);
    //                     $q->where('check_in', '<', $check_out);
    //             });
    //         })
    //         ->whereHas('hotel.city', function($q) use ($city_id) {
    //             $q->where('id', $city_id);
    //         })
    //         ->whereHas('type', function($q) {
    //             $q->where('amount', '>', 0);
    //         })
    //         ->paginate(10)
    //         ->sortBy('type.price'); // sortByDesc()


//    $result = Room::with(['type', 'hotel'])
//        ->whereDoesntHave('reservations' , function($q) use ($check_in, $check_out, $room_size) {
//            $q->where(function($q) use($check_in, $check_out) {
//                $q->where('check_out', '>', $check_in);
//                $q->where('check_in', '<', $check_out);
//            });
//        })
//        ->whereHas('hotel.city', function($q) use ($city_id) {
//            $q->where('id', $city_id);
//        })
//        ->whereHas('type', function($q) use($room_size) {
//            $q->where('amount', '>', 0);
//            $q->where('size', '=', $room_size);
//        })
//        ->paginate(10)
//        ->sortBy('type.price'); // sortByDesc()


//    $result = DB::table('rooms')
//        ->select('rooms.*', 'room_types.size', 'room_types.price', 'room_types.amount', 'hotels.name as hotel_name', 'hotels.id as hotel_id')
//        ->join('room_types', 'rooms.room_type_id', '=', 'room_types.id')
//        ->join('hotels', 'rooms.hotel_id', '=', 'hotels.id')
//        ->whereNotExists(function ($query) use ($check_in, $check_out) {
//            $query->select('reservations.id')
//                ->from('reservations')
//                ->join('reservation_room', 'reservations.id', '=', 'reservation_room.reservation_id')
//                ->whereColumn('rooms.id', 'reservation_room.room_id')
//                ->where(function ($q) use ($check_in, $check_out) {
//                    $q->where('check_out', '>', $check_in);
//                    $q->where('check_in', '<', $check_out);
//                })
//                ->limit(1);
//        })
//        ->whereExists(function($q) use($city_id) {
//            $q->select('hotels.id')
//                ->from('hotels')
//                ->whereColumn('rooms.hotel_id','hotels.id')
//                ->whereExists(function($q) use($city_id) {
//                    $q->select('cities.id')
//                        ->from('cities')
//                        ->whereColumn('cities.id','hotels.city_id')
//                        ->where('id', $city_id)
//                        ->limit(1);
//                })
//                ->limit(1);
//        })
//        ->where('room_types.amount', '>', 0)
//        ->where('room_types.size', '=', $room_size)
//        ->orderBy('room_types.price', 'asc')
//        ->get();

    // $result = Room::with(['type', 'hotel'])
    //     ->whereDoesntHave('reservations' , function($q) use ($check_in, $check_out, $room_size) {
    //                 $q->where(function($q) use($check_in, $check_out) {
    //                     $q->where('check_out', '>', $check_in);
    //                     $q->where('check_in', '<', $check_out);
    //             });
    //         })
    //         ->whereHas('hotel.city', function($q) use ($city_id) {
    //             $q->where('id', $city_id);
    //         })
    //         ->whereHas('type', function($q) use($room_size) {
    //             $q->where('amount', '>', 0);
    //             $q->where('size', '=', $room_size);
    //         })
    //         ->paginate(10)
    //         ->sortBy('type.price'); // sortByDesc()


    /**
     * 16
     */

//    $check_in = '2020-06-01';
//    $check_out = '2020-06-09';
//
//    $city_id = 1;
//    $room_size = 2;
//
//    $result = DB::table('rooms')
//        ->select('rooms.*', 'room_types.size', 'room_types.price', 'room_types.amount', 'hotels.name as hotel_name', 'hotels.id as hotel_id')
//        ->join('room_types', 'rooms.room_type_id', '=', 'room_types.id')
//        ->join('hotels', 'rooms.hotel_id', '=', 'hotels.id')
//        ->whereNotExists(function ($query) use ($check_in, $check_out) {
//            $query->select('reservations.id')
//                ->from('reservations')
//                ->join('reservation_room', 'reservations.id', '=', 'reservation_room.reservation_id')
//                ->whereColumn('rooms.id', 'reservation_room.room_id')
//                ->where(function ($q) use ($check_in, $check_out) {
//                    $q->where('check_out', '>', $check_in);
//                    $q->where('check_in', '<', $check_out);
//                    $q->where('room_types.amount', '=', 0);
//                })
//                ->limit(1);
//        })
//        ->whereExists(function($q) use($city_id) {
//            $q->select('hotels.id')
//                ->from('hotels')
//                ->whereColumn('rooms.hotel_id','hotels.id')
//                ->whereExists(function($q) use($city_id) {
//                    $q->select('cities.id')
//                        ->from('cities')
//                        ->whereColumn('cities.id','hotels.city_id')
//                        ->where('id', $city_id)
//                        ->limit(1);
//                })
//                ->limit(1);
//        })
//        ->where('room_types.amount', '>', 0)
//        ->where('room_types.size', '=', $room_size)
//        ->orderBy('room_types.price', 'asc')
//        ->paginate(10);
//
//    $room_id = 6;
//    $user_id = 1;
//    DB::transaction(function () use($room_id, $user_id, $check_in, $check_out) {
//
//        $room = Room::findOrFail($room_id);
//
//        $reservation = new Reservation;
//        $reservation->user_id = $user_id;
//        $reservation->check_in = $check_in;
//        $reservation->check_out = $check_out;
//        $reservation->price = $room->type->price;
//        $reservation->save();
//
//        $room->reservations()->attach($reservation->id);
//
//        RoomType::where('id', $room->room_type_id)
//            ->where('amount', '>', 0)
//            ->decrement('amount');
//
//    });
//
//    dump($result);
    /**
     * 17
     */
//    $check_in = '2020-06-01';
//    $check_out = '2020-06-09';
//
//    $city_id = 1;
//    $room_size = 2;
//
//    $result = DB::table('rooms')
//        ->select('rooms.*', 'room_types.size', 'room_types.price', 'room_types.amount', 'hotels.name as hotel_name', 'hotels.id as hotel_id')
//        ->join('room_types', 'rooms.room_type_id', '=', 'room_types.id')
//        ->join('hotels', 'rooms.hotel_id', '=', 'hotels.id')
//        ->whereNotExists(function ($query) use ($check_in, $check_out) {
//            $query->select('reservations.id')
//                ->from('reservations')
//                ->join('reservation_room', 'reservations.id', '=', 'reservation_room.reservation_id')
//                ->whereColumn('rooms.id', 'reservation_room.room_id')
//                ->where(function ($q) use ($check_in, $check_out) {
//                    $q->where('check_out', '>', $check_in);
//                    $q->where('check_in', '<', $check_out);
//                    $q->where('room_types.amount', '=', 0);
//                })
//                ->limit(1);
//        })
//        ->whereExists(function($q) use($city_id) {
//            $q->select('hotels.id')
//                ->from('hotels')
//                ->whereColumn('rooms.hotel_id','hotels.id')
//                ->whereExists(function($q) use($city_id) {
//                    $q->select('cities.id')
//                        ->from('cities')
//                        ->whereColumn('cities.id','hotels.city_id')
//                        ->where('id', $city_id)
//                        ->limit(1);
//                })
//                ->limit(1);
//        })
//        ->where('room_types.size', '=', $room_size)
//        ->orderBy('room_types.price', 'asc')
//        ->paginate(10);
//
//    $room_id = 5;
//    $user_id = 1;
//    DB::transaction(function () use($room_id, $user_id, $check_in, $check_out) {
//
//        $room = Room::findOrFail($room_id);
//
//        $reservation = new Reservation;
//        $reservation->user_id = $user_id;
//        $reservation->check_in = $check_in;
//        $reservation->check_out = $check_out;
//        $reservation->price = $room->type->price;
//        $reservation->save();
//
//        $room->reservations()->attach($reservation->id);
//
//        RoomType::where('id', $room->room_type_id)
//            ->where('amount', '>', 0)
//            ->decrement('amount');
//
//    });
    /**
     * 18
     */
//    $user_id = 1;
//
//    $result = Reservation::with(['rooms.type', 'rooms.hotel'])
//        ->where('user_id', $user_id)->get();
//
//    dump($result);
    /**
     * 19
     */
//    $hotel_id = [1];
//
//    $result = Reservation::with(['rooms.type', 'user'])
//        ->whereHas('rooms.hotel', function($q) use($hotel_id) {
//            $q->whereIn('hotel_id', $hotel_id);
//        })
//        ->get();
//
//    dump($result);
    /**
     * 20
     */
//    $hotel_id = [1];
//
//    // $result = Reservation::with(['rooms.type', 'user'])
//    //         ->select('reservations.*', DB::raw('DATEDIFF(check_out, check_in) as nights'))
//    //         ->whereHas('rooms.hotel', function($q) use($hotel_id) {
//    //             $q->whereIn('hotel_id', $hotel_id);
//    //         })
//    //         ->orderBy('nights', 'DESC')
//    //         ->get();
//
//
//    $result = Room::whereHas('hotel', function($q) use($hotel_id) {
//        $q->whereIn('hotel_id', $hotel_id);
//    })
//        ->withCount('reservations')
//        ->orderBy('reservations_count', 'DESC')
//        ->get();
//
//    dump($result);

    /**
     * 21
     */
//    $hotel_id = range(1,10);
//
//    // $result = Hotel::whereIn('id',$hotel_id)
//    //         ->withCount('rooms')
//    //         ->orderBy('rooms_count', 'desc')
//    //         ->get();
//
//    $result = DB::table('rooms')
//        ->join('room_types','rooms.room_type_id', '=', 'room_types.id')
//        ->selectRaw('sum(room_types.amount) as number_of_single_rooms, rooms.name')
//        ->groupBy('rooms.name', 'room_types.size')
//        ->having('room_types.size', '=', 1)
//        ->whereIn('rooms.hotel_id', $hotel_id)
//        ->orderBy('number_of_single_rooms', 'desc')
//        ->get();
//
//    dump($result);
    /**
     * 22
     */
//    $result = DB::table('users')->orderByDesc(
//        DB::table('reservations')
//            ->select('price')
//            ->whereColumn('users.id', 'reservations.user_id')
//            ->orderByDesc('price')
//            ->limit(1)
//    )->get();
//
//    dump($result);
    /**
     * 23
     */
//    $city = City::find(1);
//
//    $hotel = new Hotel;
//    $hotel->name = 'hotel name';
//    $hotel->description = 'hotel description';
//    $hotel->city()->associate($city);
//    $result = $hotel->save();
//
//    dump($result);
    /**
     * 24
     */
//    $hotel = Hotel::find(1);
//
//    $room_type = new RoomType();
//    $room_type->size = 2;
//    $room_type->price = 200;
//    $room_type->amount = 2;
//    $room_type->save();
//
//    $room = new Room;
//    $room->name = 'hotel name';
//    $room->description = 'hotel description';
//    $room->type()->associate($room_type);
//
//    $result = $hotel->rooms()->save($room);
//
//    dump($result);
    /**
     * 25
     */
    // $room = Room::find(1);
    // $room->name = 'new name';
    // $result = $room->save();

//    // $country = Country::find(5);
//    $result = Country::destroy([5,6,7,8,9,10]);
//    // $result = $country->delete();
//
//    dump($result);

    /**
     * 26
     */
//    $result = Reservation::chunk(5, function ($reservations) {
//        foreach ($reservations as $reservation)
//        {
//            foreach ($reservation->rooms()->get() as $room)
//            {
//                if(!$room->pivot->status)
//                    $reservation->delete();
//            }
//
//        }
//    });

    dump($result);


    return view('welcome');
});
