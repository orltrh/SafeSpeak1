<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ratchet\ConnectionInterface;
use Ratchet\MessageComponentInterface;
use Ratchet\WebSocket\WsConnection;
use SplObjectStorage;

class ChatController implements MessageComponentInterface
{
    protected $clients;

    public function __construct()
    {
        $this->clients = new SplObjectStorage;
    }

    public function index(Request $request)
    {
        return view('chat.index');
    }

    public function room(Request $request, $roomId)
    {
        return view('chat.room', compact('roomId'));
    }

    public function ws(WsConnection $conn)
    {
        $this->clients->attach($conn);
        echo "New connection! ({$conn->resourceId})\n";

        $conn->on('message', function ($message) use ($conn) {
            echo "Received message: {$message}\n";
            $message = json_decode($message);
            foreach ($this->clients as $client) {
                if ($client !== $conn) {
                    $client->send(json_encode([
                        'username' => $message->username,
                        'content' => $message->content
                    ]));
                }
            }
        });

        $conn->on('close', function () use ($conn) {
            $this->clients->detach($conn);
            echo "Connection closed! ({$conn->resourceId})\n";
        });
    }

    public function onOpen(ConnectionInterface $conn)
    {
        // Do nothing
    }

    public function onMessage(ConnectionInterface $from, $message)
    {
        // Do nothing
    }

    public function onClose(ConnectionInterface $conn)
    {
        // Do nothing
    }

    public function onError(ConnectionInterface $conn, \Exception $e)
    {
        echo "Error: {$e->getMessage()}\n";
        $conn->close();
    }
}

