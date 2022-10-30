@extends('layoult') <!--подключаем файл с кодом, дабы вынести повторение кода-->

@section('content') <!--указываем название секции и конец обязательно пишем-->
      @if (count($users))
			<div class="table-responsive">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)

                        <tr>
                            <th scope="row">{{$user->id}}</th>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->phone}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div><!-- ./table-responsive-->
            {{ $users->appends(['s'=>request()->s])->links() }}

      @endif
@endsection