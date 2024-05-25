@php 

$comments = App\Models\Comment::where('article_id',$newsarticle->id)->orderBy('id','desc')->get();

@endphp
<x-frontend.layouts.master>
                    <div class="card mb-4">
                        <a href="#!"><img class="card-img-top" style="height:350px;" src="/storage/article/{{$newsarticle->image}}" alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted">{{$newsarticle->date}}</div>
                            <h2 class="card-title">{{$newsarticle->title}}</h2>
                            <p class="card-text">{{$newsarticle->content}}</p>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">Add Comment</div>
                        <div class="card-body">
                            <div class="row input-group">
                            <form action="{{route('comments.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                                <div class="col-md-12">
                                <input class="form-control" name="comment"  type="text" placeholder="Type Comment..."  required/>
                                </div>
                                <input class="form-control" name="user_id" type="hidden" value="{{Auth::user()->id}}" />
                                <input class="form-control" name="user_name" type="hidden" value="{{Auth::user()->name}}" />
                                <input class="form-control" name="article_id" type="hidden" value="{{$newsarticle->id}}" />
                                <button class="btn btn-primary" id="button-search" type="submit">send</button>
                            </form>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">Comments</div>
                        <div class="card-body">
                                @foreach($comments as $comments)
                                    <div class="row mb-2 py-3" >
                                        <div class="col-12">
                                            <div class="py-3 col-md-6" style="background:#9f9797; border-radius: 5px;">
                                                <p><img src="{{asset('ui/frontend/img/user.png')}}" style="height:25px;" alt=""><b>{{$comments->user_name}}</b></p>
                                                <span class="px-5 py-0 my-0" style="">{{$comments->comment}}</span>
                                            </div>    
                                        </div>
                                    </div>
                                    
                                @endforeach    
                        </div>
                    </div>

</x-frontend.layouts.master>