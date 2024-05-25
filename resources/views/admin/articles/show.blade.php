<x-admin.layouts.admin_master>
                    <div class="card mb-4">
                        <a href="#!"><img class="card-img-top" src="/storage/article/{{$newsarticle->image}}" alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted">{{$newsarticle->date}}</div>
                        <h2 class="card-title">{{$newsarticle->title}}</h2>
                            <p class="card-text">{{$newsarticle->content}}</p>
                            <a class="btn btn-primary" href="#!">Read more →</a>
                        </div>
                    </div>
</x-admin.layouts.admin_master>