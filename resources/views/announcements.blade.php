@section('Announcements')

use BBS\Announcement;

$announcements = App\Announcement::all();
foreach ($announcements as $announcement) {
  echo $announcement->name;
}
@endsection
