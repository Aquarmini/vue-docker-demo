FROM node:10-alpine as builder

WORKDIR /usr/src/build

ADD package.json /usr/src/build
ADD package-lock.json /usr/src/build
RUN npm install -g cnpm --registry=https://registry.npm.taobao.org && cnpm install

COPY . /usr/src/build
RUN npm run-script build

FROM nginx:alpine

COPY --from=builder /usr/src/build/dist /usr/src/app/dist

ENTRYPOINT ["nginx", "-g", "daemon off;"]

#WORKDIR /usr/src/app
#
#RUN npm install -g cnpm --registry=https://registry.npm.taobao.org && cnpm install
#
#ENTRYPOINT ["node","index"]
#EXPOSE 3000

