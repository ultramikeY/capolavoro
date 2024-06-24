from fastapi import FastAPIù
import random
app = FastAPI()

@app.get('/')
async def root():
    return {
        'example': 'this is an example', 'data': 0
    }

@app.get('/random')
async def get_random()
    rn