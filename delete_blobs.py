def callback(blob, metadata):
    bad_blobs = {
        b'0b1b9b86b708c54f1f9cd009ad37003d85562aae',
        b'0a20c68fcf6a93d6ed075b2eb977aa8e8eaafc51',
        b'024d1cf44a26b3fa8aff2c785d9e14ba2e2383c0',
        b'09e15ddeadd1e986c0f197e32eec393f144fa0a2',
        b'058d4c8e46815b716a898a467491625159183de6',
    }
    if metadata.oid in bad_blobs:
        return None  # This tells git_filter_repo to DELETE this blob
    return blob
