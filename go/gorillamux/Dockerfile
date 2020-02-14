FROM golang:1.14-rc-buster

EXPOSE 8080

RUN go get -u github.com/gorilla/mux

WORKDIR /code

COPY . .

CMD ["go", "run", "src/main.go"]