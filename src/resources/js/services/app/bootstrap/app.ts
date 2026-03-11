import { getAuthUser } from "../application";

const user = getAuthUser();
console.log("auth user", user);
