<x-app-layout>
    <x-slot name="header">Quizler</x-slot>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">
                <a href="{{ route('quizzes.create') }}" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i>Quiz oluştur</a>
            </h5>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Quiz Adı</th>
                        <th scope="col">Durum</th>
                        <th scope="col">Bitiş Tarihi</th>
                        <th scope="col">İşlemler</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($quizzes as $quiz)
                        <tr>
                            <td>{{ $quiz->title }}</td>
                            <td>{{ $quiz->status }}</td>
                            <td>{{ $quiz->finished_at }}</td>
                            <td>
                                <a class="btn btn-primary btn-sm btn-primary" href="#" role="button">
                                    <i class="fa fa-pen" aria-hidden="true"></i>
                                </a>
                                <a class="btn btn-primary btn-sm btn-danger" href="#" role="button">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            {{ $quizzes->links() }}

        </div>
    </div>
</x-app-layout>
