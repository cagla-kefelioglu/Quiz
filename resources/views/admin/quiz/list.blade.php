
<x-app-layout>
    <x-slot name="header">Quizler </x-slot>
   <div class="card">
       <div class="card-body">
           <h5 class="card-title"><a href="{{route('quizzes.create')}}" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i>Quiz Oluştur</a></h5>

         <table class="table table-bordered">
          <thead>
            <tr>
                <th scope="col">Quiz</th>
                <th scope="col">Durum</th>
                <th scope="col">Bitiş Tarihi</th>
                <th scope="col">İşlemler</th>
            </tr>
          </thead>

            <tbody>
            @foreach($quizzes as $quiz)
               <tr>
                 <td>{{$quiz->title}}</td>
                 <th>{{$quiz->status}}</th>
                 <th>{{$quiz->finished_at}}</th>
                 <th>
                     <a href="{{route('quizzes.edit',$quiz->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-pen"></i></a>
                     <a href="{{route('quizzes.destroy',$quiz->id)}}" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
                 </th>
               </tr>
            @endforeach
            </tbody>
         </table>
           {{$quizzes->links()}}{{--paginate için--}}


       </div>
   </div>
</x-app-layout>
