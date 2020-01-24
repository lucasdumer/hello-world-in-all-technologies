FROM python:3.7-alpine

EXPOSE 8000

WORKDIR /code

RUN pip install django

ENV PYTHONDONTWRITEBYTECODE 1
ENV PYTHONUNBUFFERED 1

COPY ./src /code

CMD ["python", "manage.py", "runserver", "0.0.0.0:8000"]