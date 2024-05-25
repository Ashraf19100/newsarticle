                
@php 
$newsarticle = App\Models\Newsarticle::orderBy('id','desc')->first();
$newsarticles = App\Models\Newsarticle::orderBy('id','asc')->paginate(4);
$page_total=0;
@endphp           

                <!-- Featured blog post-->
                    <div class="card mb-4">
                        <a href="#!"><img class="card-img-top" style="height:350px;" src="/storage/article/{{$newsarticle->image}}" alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted">{{$newsarticle->date}}</div>
                            <h2 class="card-title">{{$newsarticle->title}}</h2>
                                    @php 
                                    $line=strtok($newsarticle->content, "\n");
                                    @endphp
                            <p class="card-text">{{$line}}</p>
                            <a class="btn btn-primary" href="{{route('newsarticle.article',$newsarticle->id)}}">Read more →</a>
                        </div>
                    </div>
                    <!-- Nested row for non-featured blog posts-->
                    <div class="row">
                            <!-- Blog post-->
                            @foreach($newsarticles as $newsarticles)
                            <div class="col-md-6 card mb-4">
                                <a href="#!"><img class="card-img-top" src="/storage/article/{{$newsarticles->image}}" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">{{$newsarticles->date}}</div>
                                    <h2 class="card-title h4">{{$newsarticles->title}}</h2>
                                    @php 
                                    $line=strtok($newsarticles->content, "\n");
                                    $page_total++;
                                    @endphp
                                    <p class="card-text">{{$line}}</p>
                                    <a class="btn btn-primary" href="{{route('newsarticle.article',$newsarticles->id)}}">Read more →</a>
                                </div>
                            </div>
                            @endforeach
                            @php 
                                $page_sl=$page_total/4;
                                $page_no=intval($page_sl)+2;
                                $i=1;
                            @endphp
                    </div>
                    <!-- Pagination-->
                    <nav aria-label="Pagination">
                        
                    <hr class="my-0" />
                        <ul class="pagination justify-content-center my-4">
                            <li class="page-item"><a class="page-link" href="?page=1">Newer</a></li>
                            @for($i=1;$i<=$page_no;$i++)
                            <li class="page-item"><a class="page-link" href="?page={{$i}}">{{$i}}</a></li>
                            @endfor
                            <li class="page-item"><a class="page-link" href="?page={{$page_no}}">Older</a></li>
                        </ul>
                    </nav>