<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    #watermark {
        position: fixed;
        height: 100vh;
        width: 100%;
        top: 30%;

        z-index: -1000;
    }
    #watermark p{
        text-align: center;
        font-size: 5rem;
        letter-spacing: .25rem;
        color: #9cc3e7;
        opacity: 0.5;
        transform: rotate(-45deg);
    }

    p{
        text-align: justify;
    }

</style>

<body>
    <h1>Listado de Post</h1>
    <div id="watermark">
        <p>watermark</p>
    </div>
    {{-- @foreach ($data as $item)
        <h3>{{$item->title}}</h3>
        <p>{{$item->body}}</p> <br>
    @endforeach --}}
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis voluptatum aliquid, necessitatibus doloribus
        voluptatem optio ducimus minima numquam, deleniti eius libero similique illo tenetur corporis labore possimus?
        Ipsa, cumque. Quae.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis voluptatum aliquid, necessitatibus doloribus
        voluptatem optio ducimus minima numquam, deleniti eius libero similique illo tenetur corporis labore possimus?
        Ipsa, cumque. Quae.
    </p>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis voluptatum aliquid, necessitatibus doloribus
        voluptatem optio ducimus minima numquam, deleniti eius libero similique illo tenetur corporis labore possimus?
        Ipsa, cumque. Quae.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis voluptatum aliquid, necessitatibus doloribus
        voluptatem optio ducimus minima numquam, deleniti eius libero similique illo tenetur corporis labore possimus?
        Ipsa, cumque. Quae.
    </p>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis voluptatum aliquid, necessitatibus doloribus
        voluptatem optio ducimus minima numquam, deleniti eius libero similique illo tenetur corporis labore possimus?
        Ipsa, cumque. Quae.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis voluptatum aliquid, necessitatibus doloribus
        voluptatem optio ducimus minima numquam, deleniti eius libero similique illo tenetur corporis labore possimus?
        Ipsa, cumque. Quae.
    </p>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis voluptatum aliquid, necessitatibus doloribus
        voluptatem optio ducimus minima numquam, deleniti eius libero similique illo tenetur corporis labore possimus?
        Ipsa, cumque. Quae.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis voluptatum aliquid, necessitatibus doloribus
        voluptatem optio ducimus minima numquam, deleniti eius libero similique illo tenetur corporis labore possimus?
        Ipsa, cumque. Quae.
    </p>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis voluptatum aliquid, necessitatibus doloribus
        voluptatem optio ducimus minima numquam, deleniti eius libero similique illo tenetur corporis labore possimus?
        Ipsa, cumque. Quae.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis voluptatum aliquid, necessitatibus doloribus
        voluptatem optio ducimus minima numquam, deleniti eius libero similique illo tenetur corporis labore possimus?
        Ipsa, cumque. Quae.
    </p>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis voluptatum aliquid, necessitatibus doloribus
        voluptatem optio ducimus minima numquam, deleniti eius libero similique illo tenetur corporis labore possimus?
        Ipsa, cumque. Quae.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis voluptatum aliquid, necessitatibus doloribus
        voluptatem optio ducimus minima numquam, deleniti eius libero similique illo tenetur corporis labore possimus?
        Ipsa, cumque. Quae.
    </p>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis voluptatum aliquid, necessitatibus doloribus
        voluptatem optio ducimus minima numquam, deleniti eius libero similique illo tenetur corporis labore possimus?
        Ipsa, cumque. Quae.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis voluptatum aliquid, necessitatibus doloribus
        voluptatem optio ducimus minima numquam, deleniti eius libero similique illo tenetur corporis labore possimus?
        Ipsa, cumque. Quae.
    </p>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis voluptatum aliquid, necessitatibus doloribus
        voluptatem optio ducimus minima numquam, deleniti eius libero similique illo tenetur corporis labore possimus?
        Ipsa, cumque. Quae.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis voluptatum aliquid, necessitatibus doloribus
        voluptatem optio ducimus minima numquam, deleniti eius libero similique illo tenetur corporis labore possimus?
        Ipsa, cumque. Quae.
    </p>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis voluptatum aliquid, necessitatibus doloribus
        voluptatem optio ducimus minima numquam, deleniti eius libero similique illo tenetur corporis labore possimus?
        Ipsa, cumque. Quae.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis voluptatum aliquid, necessitatibus doloribus
        voluptatem optio ducimus minima numquam, deleniti eius libero similique illo tenetur corporis labore possimus?
        Ipsa, cumque. Quae.
    </p>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis voluptatum aliquid, necessitatibus doloribus
        voluptatem optio ducimus minima numquam, deleniti eius libero similique illo tenetur corporis labore possimus?
        Ipsa, cumque. Quae.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis voluptatum aliquid, necessitatibus doloribus
        voluptatem optio ducimus minima numquam, deleniti eius libero similique illo tenetur corporis labore possimus?
        Ipsa, cumque. Quae.
    </p>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis voluptatum aliquid, necessitatibus doloribus
        voluptatem optio ducimus minima numquam, deleniti eius libero similique illo tenetur corporis labore possimus?
        Ipsa, cumque. Quae.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis voluptatum aliquid, necessitatibus doloribus
        voluptatem optio ducimus minima numquam, deleniti eius libero similique illo tenetur corporis labore possimus?
        Ipsa, cumque. Quae.
    </p>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis voluptatum aliquid, necessitatibus doloribus
        voluptatem optio ducimus minima numquam, deleniti eius libero similique illo tenetur corporis labore possimus?
        Ipsa, cumque. Quae.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis voluptatum aliquid, necessitatibus doloribus
        voluptatem optio ducimus minima numquam, deleniti eius libero similique illo tenetur corporis labore possimus?
        Ipsa, cumque. Quae.
    </p>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis voluptatum aliquid, necessitatibus doloribus
        voluptatem optio ducimus minima numquam, deleniti eius libero similique illo tenetur corporis labore possimus?
        Ipsa, cumque. Quae.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis voluptatum aliquid, necessitatibus doloribus
        voluptatem optio ducimus minima numquam, deleniti eius libero similique illo tenetur corporis labore possimus?
        Ipsa, cumque. Quae.
    </p>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis voluptatum aliquid, necessitatibus doloribus
        voluptatem optio ducimus minima numquam, deleniti eius libero similique illo tenetur corporis labore possimus?
        Ipsa, cumque. Quae.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis voluptatum aliquid, necessitatibus doloribus
        voluptatem optio ducimus minima numquam, deleniti eius libero similique illo tenetur corporis labore possimus?
        Ipsa, cumque. Quae.
    </p>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis voluptatum aliquid, necessitatibus doloribus
        voluptatem optio ducimus minima numquam, deleniti eius libero similique illo tenetur corporis labore possimus?
        Ipsa, cumque. Quae.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis voluptatum aliquid, necessitatibus doloribus
        voluptatem optio ducimus minima numquam, deleniti eius libero similique illo tenetur corporis labore possimus?
        Ipsa, cumque. Quae.
    </p>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis voluptatum aliquid, necessitatibus doloribus
        voluptatem optio ducimus minima numquam, deleniti eius libero similique illo tenetur corporis labore possimus?
        Ipsa, cumque. Quae.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis voluptatum aliquid, necessitatibus doloribus
        voluptatem optio ducimus minima numquam, deleniti eius libero similique illo tenetur corporis labore possimus?
        Ipsa, cumque. Quae.
    </p>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis voluptatum aliquid, necessitatibus doloribus
        voluptatem optio ducimus minima numquam, deleniti eius libero similique illo tenetur corporis labore possimus?
        Ipsa, cumque. Quae.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis voluptatum aliquid, necessitatibus doloribus
        voluptatem optio ducimus minima numquam, deleniti eius libero similique illo tenetur corporis labore possimus?
        Ipsa, cumque. Quae.
    </p>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis voluptatum aliquid, necessitatibus doloribus
        voluptatem optio ducimus minima numquam, deleniti eius libero similique illo tenetur corporis labore possimus?
        Ipsa, cumque. Quae.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis voluptatum aliquid, necessitatibus doloribus
        voluptatem optio ducimus minima numquam, deleniti eius libero similique illo tenetur corporis labore possimus?
        Ipsa, cumque. Quae.
    </p>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis voluptatum aliquid, necessitatibus doloribus
        voluptatem optio ducimus minima numquam, deleniti eius libero similique illo tenetur corporis labore possimus?
        Ipsa, cumque. Quae.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis voluptatum aliquid, necessitatibus doloribus
        voluptatem optio ducimus minima numquam, deleniti eius libero similique illo tenetur corporis labore possimus?
        Ipsa, cumque. Quae.
    </p>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis voluptatum aliquid, necessitatibus doloribus
        voluptatem optio ducimus minima numquam, deleniti eius libero similique illo tenetur corporis labore possimus?
        Ipsa, cumque. Quae.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis voluptatum aliquid, necessitatibus doloribus
        voluptatem optio ducimus minima numquam, deleniti eius libero similique illo tenetur corporis labore possimus?
        Ipsa, cumque. Quae.
    </p>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis voluptatum aliquid, necessitatibus doloribus
        voluptatem optio ducimus minima numquam, deleniti eius libero similique illo tenetur corporis labore possimus?
        Ipsa, cumque. Quae.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis voluptatum aliquid, necessitatibus doloribus
        voluptatem optio ducimus minima numquam, deleniti eius libero similique illo tenetur corporis labore possimus?
        Ipsa, cumque. Quae.
    </p>
</body>

</html>
