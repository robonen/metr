export const getURL = (path) => {
    const image = path.replace('public/', '');
    return `http://tusur.tk:9080/storage/${image}`;
};