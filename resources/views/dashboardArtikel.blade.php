@extends('layouts.admin')

@section('content')
@include('partials.sidebar')
    <div class="container-fluid d-flex flex-column mside ">
        <p class="h2 ms-4 mt-3">Artikel</p>
        <div class="d-flex mt-3 justify-content-between">
            <a href="artikel/add" class="btn btn-success d-flex">Buat Artikel</a>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
        </div>
        
        <table class="table table-secondary table-hover w-auto mt-2 border rounded overflow-hidden">
            <thead>
              <tr>
                <th scope="col">Tanggal Rilis</th>
                <th scope="col">Penulis</th>
                <th scope="col">Nama Artikel</th>
                <th scope="col" style="width: 20%">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>2022-03-05</td>
                <td>Nabil Mustofa</td>
                <td>Kemenangan Berturut</td>
                <td>
                    <div>
                        <a href="" class="btn btn-secondary">View</a>
                        <a href="" class="btn btn-warning">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </div>
                </td>
              </tr>
              <tr>
                <td>2022-03-05</td>
                <td>Nabil Mustofa</td>
                <td>Kemenangan Berturut</td>
                <td>
                    <div>
                        <a href="" class="btn btn-secondary">View</a>
                        <a href="" class="btn btn-warning">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </div>
                </td>
              </tr>
              <tr>
                <td>2022-03-05</td>
                <td>Nabil Mustofa</td>
                <td>Kemenangan Berturut</td>
                <td>
                    <div>
                        <a href="" class="btn btn-secondary">View</a>
                        <a href="" class="btn btn-warning">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </div>
                </td>
              </tr>
              <tr>
                <td>2022-03-05</td>
                <td>Nabil Mustofa</td>
                <td>Kemenangan Berturut</td>
                <td>
                    <div>
                        <a href="" class="btn btn-secondary">View</a>
                        <a href="" class="btn btn-warning">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </div>
                </td>
              </tr>
              <tr>
                <td>2022-03-05</td>
                <td>Nabil Mustofa</td>
                <td>Kemenangan Berturut</td>
                <td>
                    <div>
                        <a href="" class="btn btn-secondary">View</a>
                        <a href="" class="btn btn-warning">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </div>
                </td>
              </tr>
            </tbody>
          </table>
          <ul class="pagination mx-auto">
            <li class="page-item disabled">
              <a class="page-link">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active" aria-current="page">
              <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#">Next</a>
            </li>
          </ul>
    </div>

@endsection