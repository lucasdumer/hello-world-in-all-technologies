FROM node:13

EXPOSE 8081

ENV PORT 8081

WORKDIR /code

COPY package.json package.json

RUN npm install

COPY . .

CMD ["npm", "start"]