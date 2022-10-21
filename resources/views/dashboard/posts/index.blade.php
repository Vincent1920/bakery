          @extends('dashboard.layouts.main')
          @section('container')

          <div
              class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
              <h1 class="h2">menu</h1>
          </div>

          <div class="table-responsive col-lg-8">
              <a href="/posts/create" class="btn btn-primary"> Creat new post</a>

              <table class="table table-striped table-sm">
                  <thead>
                      <tr>
                          <th scope="col">#</th>
                          <th scope="col">title</th>
                          <th scope="col">harga</th>
                          <th scope="col">category</th>
                          <th scope="col">body</th>

                          </th>
                      </tr>
                  </thead>
                  <tbody>


                      @foreach ( $posts as $post)

                      <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{ $post->title }}</td>
                          <td>$.{{ $post->harga }}</td>
                          <td>{{ $post->categories->name }}</td>
                          <td>{{ $post->excerpt }}</td>
                          <td>
                              <a href="/posts/dashoard/show/{{$post->slug}}" class="badge bg-info"><svg
                                      xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                      fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                      stroke-linejoin="round" class="feather feather-eye">
                                      <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                      <circle cx="12" cy="12" r="3"></circle>
                                  </svg></a>


                              <a href="/posts/edit/{{$post->id}}" class="badge bg-warning">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                      fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                      stroke-linejoin="round" class="feather feather-edit">
                                      <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                      <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                  </svg>
                              </a>

                              <form action="/posts/delete/{{$post->id}}" method="POST" class="d-inline">
                                  @method('delete')
                                  @csrf
                                  <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><svg xmlns="http://www.w3.org/2000/svg"
                                          width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                          stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                          class="feather feather-x-circle">
                                          <circle cx="12" cy="12" r="10"></circle>
                                          <line x1="15" y1="9" x2="9" y2="15"></line>
                                          <line x1="9" y1="9" x2="15" y2="15"></line>
                                      </svg>
                                  </button>
                              </form>
                          </td>
                      </tr>
                      @endforeach
                  </tbody>
              </table>
          </div>
          @endsection