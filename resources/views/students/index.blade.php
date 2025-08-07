@extends('layouts.app')

@section('content')

<style>
    .card-box {
        display: block;
        background-color: white;
        border: 1px solid #575757;
        border-radius: 10px;
        padding: 12px;
        transition: box-shadow 0.3s ease, transform 0.3s ease;
        box-shadow: 0 4px 10px rgba(82, 5, 126, 0.1);
        height: 90px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    a:hover .card-box {
        box-shadow: 0 6px 12px rgba(82, 5, 126, 0.3);
        transform: translateY(-4px);
    }

    .student-name {
        margin: 0;
        font-weight: bold;
        color: rgb(82, 5, 126);
    }

    .student-username {
        margin: 2px 0;
        font-size: 14px;
        color: gray;
    }

    .student-desc {
        margin: 2px 0;
        font-size: 14px;
        color: #444;
    }

    .avatar {
        width: 50px;
        height: 50px;
        background-color: rgb(161, 161, 161);
        border-radius: 50%;
        flex-shrink: 0;
    }
</style>

<div style="
    display: flex;
    align-items: center;
    justify-content: center;
    height: 80vh;
    background-color: #f4f4f4;
">
    <div style="
        border: 3px solid rgb(82, 5, 126);
        border-radius: 20px;
        padding: 30px;
        max-width: 1000px;
        width: 100%;
        min-height: 500px;
        box-sizing: border-box;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background-color: white;
        box-shadow: 0 10px 20px rgba(82, 5, 126, 0.1);
    ">
        <div style="
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
        ">
            @foreach ($students as $student)
                <a href="/students/{{$student['id'] }}" style="text-decoration: none; color: inherit;">
                    <div class="card-box">
                        <div style="display: flex; gap: 15px; align-items: center;">
                            <div class="avatar"></div>
                            <div>
                                <p class="student-name">{{$student['nama'] }}</p>
                                <p class="student-username">{{ '@' . $student['username'] }}</p>
                                <p class="student-desc">
                                    {{ \Illuminate\Support\Str::limit($student['deskripsi'], 50, '...') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>

@endsection
