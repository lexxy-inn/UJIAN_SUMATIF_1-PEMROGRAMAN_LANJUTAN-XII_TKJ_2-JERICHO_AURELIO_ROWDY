@extends('layouts.app')

@section('content')

<style>
    .action-button {
        padding: 6px 14px;
        border: 1px solid black;
        background-color: rgb(82, 5, 126);
        color: white;
        cursor: pointer;
        margin-right: 10px;
        border-radius: 6px;
        transition: box-shadow 0.3s ease, transform 0.3s ease;
    }

    .action-button:last-child {
        margin-right: 0;
    }

    .action-button:hover {
        box-shadow: 0 4px 8px rgba(82, 5, 126, 0.4);
        transform: translateY(-3px);
    }
</style>

<div style="
    display: flex;
    align-items: center;
    justify-content: center;
    height: 80vh;
    background-color: #f2f2f2;
">
    <div style="
        border: 2px solid rgb(82, 5, 126);
        border-radius: 15px;
        padding: 24px;
        width: 500px;
        box-sizing: border-box;
        background-color: #ffffff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    ">
        <div style="text-align: center;">
            <img src="{{$student['foto'] }}" alt="Foto" style="
                width: 100px;
                height: 100px;
                border-radius: 50%;
                margin-bottom: 12px;
                object-fit: cover;
                background-color: #ccc;
                border: 2px solid rgb(71, 71, 71);
            ">

            <h2 style="margin: 0; font-size: 22px; font-weight: bold; color: #333;">
                {{$student['nama'] }}
            </h2>

            <p style="margin: 4px 0; font-size: 14px; color: #666;">
                {{ '@' . $student['username'] }}
            </p>

            <p style="margin: 4px 0; font-size: 14px; color: #555; text-align: center;">
                {{$student['kelas'] }} | {{$student['hobi'] }}
            </p>

            <p style="margin-top: 10px; font-size: 14px; color: #444;">
                {{$student['deskripsi'] }}
            </p>

            <div style="margin-top: 20px;">
                <button class="action-button">Edit Profil</button>
                <button class="action-button">Delete Account</button>
            </div>
        </div>
    </div>
</div>
@endsection
