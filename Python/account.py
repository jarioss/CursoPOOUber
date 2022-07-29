class Account:
    id          = int
    name        = str
    doc         = str
    email       = str
    password    = str

    def __init__(self, name, doc):
        self.name   = name
        self.doc    = doc