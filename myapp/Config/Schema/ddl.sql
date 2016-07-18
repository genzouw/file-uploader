DROP TABLE IF EXISTS upload_files;
CREATE TABLE upload_files (
    id integer not null primary key autoincrement,
    comment text,
    remote_address text,
    base64_content text not null,
    mime_type text not null,
    file_name text not null,
    file_size integer not null,
    created_at datetime default null,
    updated_at datetime default null
);

create unique index uq_upload_files_file_name
    on upload_files (file_name)
;
