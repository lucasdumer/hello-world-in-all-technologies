FROM node:13

EXPOSE 8080

ENV PORT 8080

WORKDIR /code

COPY package.json package.json

RUN npm install

COPY . .

CMD ["npm", "start"]