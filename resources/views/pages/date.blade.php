<table class="table table-striped table-inverse table-bordered">
    @if(count($posts))
        <thead class="thead-inverse">
        <tr>
            <th>Group Name</th>
            <th>Group Type</th>
            <th>Account Name</th>
            <th>Post Text</th>
            <th>Time</th>
        </tr>
        </thead>
        <tbody >
        @foreach($posts as $post)
            <tr>
                <td>{{isset($post->groupInfo) ? $post->groupInfo->name : null}}</td>
                <td>{{isset($post->groupInfo) ? $post->groupInfo->type : null}}</td>
                <td>{{$post->accountInfo->user->name}}</td>
                <td>{{$post->post_text}}</td>
                <td>{{date('d M,Y h:m a',strtotime($post->created_at))}}</td>
            </tr>
        @endforeach
        </tbody>
    @else
        <tr><td colspan="3">No Data Found</td></tr>
    @endif
</table>
<div class="paginateData">
    {{$posts->links() }}
</div>