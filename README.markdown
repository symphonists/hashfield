# Hash Field

* Version: 1.1
* Author: Symphony Community (https://github.com/symphonists), originally by Alistair Kearney
* Build Date: 2011-03-21
* Requirements: Symphony 2.1

## Installation

1. Upload the 'hashfield' folder in this archive to your Symphony 'extensions' folder.
2. Enable it by selecting the "Field: Hash", choose Enable from the with-selected menu, then click Apply.
3. You can now add the "Hash" field to your sections.


## Usage

When a value is saved, if the length is not equal to 32 characters long (or is 32 characters long but not a valid hash string), it will hash the value before inserting into the database. The original is NOT saved. It is a one way operation.

Filtering works in similar way. If the value length is not equal to 32 (or is 32 characters long but not a valid hash string), it will be hashed before comparing.