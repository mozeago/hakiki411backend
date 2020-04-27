@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
              <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('getusers') }}">
                      <span data-feather="file"></span>
                      Users
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">
                      <span data-feather="file"></span>
                      Add News Articles
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                      <span data-feather="file"></span>
                      Advert Banners
                    </a>
                </li>
              </ul>
            </div>
          </nav>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Add news Article</div>

                <div class="card-body">
                        @if (session('message'))
                        <div class="alert alert-success" role="alert">

                        {{ session('message') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                    </div>
                        @endif

                    <form method="POST" enctype="multipart/form-data" action="{{ route('news.store') }}">
                        @csrf
                        <input type="hidden" name="points" value="10"/>
                        <div class="form-row form-group">
                          <div class="col">
                            <input type="text" class="form-control" name="title" placeholder="News Title" id="news_title">
                          </div>
                          <div class="col">
                            <input type="file" class="custom-file-input" name="imageUrl" id="imageUrl">
                            <label class="custom-file-label" for="imageUrl">Image Url</label>
                          </div>
                        </div>
                        <div class="form-row form-group">
                            <div class="col">
                                <label for="news_summary" >News Summary</label>
                                <textarea class="form-control" id="news_summary" name="summary" rows="3"></textarea>
                            </div>
                            <div class="col">
                                <label class="mr-sm-2" for="news_category" name="category">News Category</label>
                                <select class="custom-select mr-sm-2" id="news_category">
                                  <option value="Fake News">Fake News</option>
                                  <option value="Verified News">Verified Source</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row form-group">
                            <div class="col">
                                <label class="mr-sm-2" for="fact_ccheck" name="category">Fact Check</label>
                                <select class="custom-select mr-sm-2" id="fact_ccheck">
                                  <option value="Fake News">The news article comes from a click-bait source</option>
                                  <option value="Verified News">The news article comes from a mainstream source</option>
                                </select>
                            </div>
                            <div class="col">
                                <label class="mr-sm-2" for="hintUrl" name="category">Hint Url</label>
                                <input type="text" class="form-control" name="hintUrl" id="hintUrl" placeholder="Hint Url">
                            </div>
                        </div>
                        <div class="form-row form-group">
                            <div class="col">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@if (session('users'))
    <div class="container-fluid">
        <div class="row">
            <table class="table table-bordered">
                <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Joined</th>
                        </tr>
                </thead>
                <tbody>
                    @foreach ( $users as $user )
                    <tr>
                        <th scope="row">$user->name</th>
                        <td colspan="2">$user->email</td>
                        <td>$user->created_at</td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endif
@endsection
