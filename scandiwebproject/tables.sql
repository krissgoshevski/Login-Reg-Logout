CREATE TABLE products 
(
    product_id INT UNSIGNED AUTO_INCREMENT,
    sku VARCHAR(255) NOT NULL UNIQUE,
    name VARCHAR(64) NOT NULL,
    price DECIMAL(18,2) NOT NULL,
    description VARCHAR(255),
    size_cd INT,
    height_f FLOAT,
    width_f FLOAT,
    length_f FLOAT,
    weight_book FLOAT,
    

    CONSTRAINT PRIMARY KEY (product_id) 
);



CREATE TABLE category 
(
    category_id INT UNSIGNED AUTO_INCREMENT,
	name VARCHAR(64),

    CONSTRAINT PRIMARY KEY (category_id) 
);



ALTER TABLE products
ADD COLUMN category_id_fk INT UNSIGNED after product_id


ALTER TABLE products
ADD CONSTRAINT FOREIGN KEY (category_id_fk) REFERENCES category (category_id) ON DELETE CASCADE -- for cascade delete, child can delete parent 


SELECT * FROM products 
INNER JOIN category ON products.category_id_fk = category.category_id -- relation 




