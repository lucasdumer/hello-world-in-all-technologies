FROM node:13

EXPOSE 3000

ENV PORT 3000

WORKDIR /code

COPY package.json package.json

RUN npm install

COPY . .

CMD ["npm", "start"]