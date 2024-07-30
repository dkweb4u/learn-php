CREATE TABLE posts(
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    body TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO posts(title, body) VALUES ('post 1','this post is one');

SELECT * FROM posts WHERE id= 2;

UPDATE posts SET title = 'post 3a' , body = 'this is an updated at last post' WHERE id = 3;

DELETE FROM posts WHERE id= 3;


INSERT INTO posts(title, body) VALUES ('post 5','this post is five'),  ('post 6','this post is six');

DROP DATABASE blog;