FROM python:3.7-alpine

EXPOSE 5000

WORKDIR /code

ENV FLASK_APP src/app.py
ENV FLASK_RUN_HOST 0.0.0.0

RUN apk add --no-cache gcc musl-dev linux-headers

COPY requirements.txt requirements.txt

RUN pip install -r requirements.txt

COPY . .

CMD ["flask", "run"]